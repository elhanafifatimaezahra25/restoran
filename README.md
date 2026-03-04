# Restoran — Restaurant Website

Simple PHP/HTML restaurant template for local development.

**Contents**
- Frontend pages: `about.html`, `menu.html`, `contact.html`, etc.
- PHP entry: `index.php`
- Assets: `css/`, `js/`, `img/`, `lib/`, `scss/`

**Prerequisites**
- Windows with XAMPP (Apache + PHP). Place this folder inside `htdocs`.

**Run locally**
1. Copy the `restoran` folder to your XAMPP `htdocs` (already at `C:\xampp\htdocs\restoran`).
2. Start Apache (and MySQL if needed) from the XAMPP Control Panel.
3. Open http://localhost/restoran in your browser.

**Git & GitHub**
- A `.gitignore` file is already included.
- To push to GitHub (remote already set to `https://github.com/elhanafifatimaezahra25/restoran.git`), create the repository on GitHub (public) and then run:

```powershell
cd C:\xampp\htdocs\restoran
git push -u origin main
```

- If the remote repo doesn't exist yet, create it on GitHub here:
https://github.com/new?owner=elhanafifatimaezahra25&repo=restoran&visibility=public

**Authentication**
- For HTTPS pushes use your GitHub username and a Personal Access Token (PAT) as password.
- Or set up SSH keys and use an SSH remote URL.

**Notes**
- Don't commit sensitive files (database dumps, credentials). Add them to `.gitignore`.

**License**
- MIT — see `LICENSE` (not included). Use or adapt freely.

**Contact**
- Project placed by you locally — 
