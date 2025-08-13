set -euo pipefail
umask 027

# --- must be root ---
if [[ $EUID -ne 0 ]]; then
  echo "Run as root: sudo bash $0" >&2
  exit 1
fi

# Paths
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
SRC_DIR="${SCRIPT_DIR}/webapp"
DEST_DIR="/opt/webapp"
UNIT_SRC="${SRC_DIR}/luffy.service"
UNIT_DST="/etc/systemd/system/luffy.service"
VENV_DIR="${DEST_DIR}/venv"

# 1) Copy app to /opt/webapp (copy CONTENTS to avoid /opt/webapp/webapp)
mkdir -p "${DEST_DIR}"
cp -a "${SRC_DIR}/." "${DEST_DIR}/"

# 2) Copy the service unit
install -m 0644 "${UNIT_SRC}" "${UNIT_DST}"

# 3) Create virtual environment & install requirements (use venv's pip)
python3 -m venv "${VENV_DIR}"
"${VENV_DIR}/bin/pip" install --upgrade pip wheel
if [[ -f "${DEST_DIR}/requirements.txt" ]]; then
  "${VENV_DIR}/bin/pip" install -r "${DEST_DIR}/requirements.txt"
fi

# 4) Make zoro own the deployment (so service running as zoro can access it)
if id -u zoro >/dev/null 2>&1; then
  chown -R zoro:zoro "${DEST_DIR}"
else
  echo "WARNING: user 'zoro' does not exist. Create it or adjust the service unit's User=." >&2
fi

# 5) Launch the service
systemctl daemon-reload
systemctl enable --now luffy.service