# GitHub Upload Instructions

## Prerequisites
- GitHub account (create at https://github.com if you don't have one)
- Git installed on your machine (download from https://git-scm.com)

## Step 1: Create a New Repository on GitHub

1. Go to https://github.com/new
2. Fill in the details:
   - **Repository name:** `vantasource-theme`
   - **Description:** Professional WordPress theme for global sourcing companies
   - **Visibility:** Public (or Private if you prefer)
   - **Initialize repository:** Leave unchecked (we already have git locally)

3. Click "Create repository"

## Step 2: Get Your Repository URL

After creating the repo, GitHub will show you the HTTPS URL. It will look like:
```
https://github.com/YOUR-USERNAME/vantasource-theme.git
```

## Step 3: Push to GitHub

Run these commands in PowerShell (from the theme directory):

```powershell
cd "c:\Users\User\Local Sites\vantasource\app\public\wp-content\themes\vantasource-theme"

# Add remote repository
git remote add origin https://github.com/YOUR-USERNAME/vantasource-theme.git

# Rename branch to main (if needed)
git branch -M main

# Push to GitHub
git push -u origin main
```

Replace `YOUR-USERNAME` with your actual GitHub username.

## Step 4: Verify Upload

1. Go to your GitHub repository: https://github.com/YOUR-USERNAME/vantasource-theme
2. You should see all files listed
3. Check that README.md is displaying correctly

## Step 5: Add More Details (Optional but Recommended)

### Add a License File
1. In GitHub, click "Add file" → "Create new file"
2. Name it `LICENSE`
3. Choose "GPL v2" template
4. Commit

### Add Topics/Tags
1. Go to repository Settings
2. Scroll to "Topics"
3. Add: `wordpress`, `theme`, `sourcing`, `logistics`, `bootstrap`, `responsive`

### Add a Description
1. In main repository page, click the gear icon
2. Add description and website URL (if applicable)

## Making Updates

After making changes locally:

```powershell
cd "c:\Users\User\Local Sites\vantasource\app\public\wp-content\themes\vantasource-theme"

# Check status
git status

# Add changes
git add .

# Commit with message
git commit -m "Your detailed commit message"

# Push to GitHub
git push origin main
```

## Commit Message Guidelines

Good commit messages:
```
git commit -m "Fix footer text color contrast issue"
git commit -m "Add new portfolio detail page template"
git commit -m "Update dependencies and improve performance"
git commit -m "Refactor custom.js for better readability"
```

Avoid:
```
git commit -m "update"
git commit -m "fix"
git commit -m "changes"
```

## Sharing Your Theme

Once on GitHub, you can:

1. **Share the Link:** https://github.com/YOUR-USERNAME/vantasource-theme
2. **Create a Release:** 
   - Click "Releases" on your repo
   - Click "Create a new release"
   - Tag: v1.3
   - Add release notes and download ZIP

3. **Submit to WordPress.org Theme Directory:**
   - Go to https://wordpress.org/themes/upload/
   - Follow the submission guidelines

## Common Issues & Solutions

### "fatal: remote origin already exists"
```powershell
git remote remove origin
git remote add origin https://github.com/YOUR-USERNAME/vantasource-theme.git
```

### "rejected... updates were rejected"
```powershell
git pull origin main --rebase
git push origin main
```

### Authentication Issues
- Use GitHub Personal Access Token instead of password
- Instructions: https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token

## Next Steps

✅ Theme is ready to share!  
✅ You can now showcase your work on your portfolio  
✅ Users can easily download and install your theme  
✅ You can collaborate with other developers  

---

**Need help?** Check GitHub's documentation: https://docs.github.com
