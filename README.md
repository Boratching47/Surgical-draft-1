# The Surgical Group — Homepage Draft

Static homepage draft (no WordPress). Navy/blue medical design.

## Files
```
surgical-group/
├── index.html        ← page structure
├── css/style.css     ← all styles (design tokens at top)
└── js/main.js        ← scroll reveal + header shrink
```

## Open in VS Code
1. File → Open Folder → choose `surgical-group`.
2. Install the **Live Server** extension.
3. Right-click `index.html` → "Open with Live Server" for a live-reloading preview.

## Editing tips
- Colours/fonts/spacing live as CSS variables at the top of `css/style.css`.
- Hero photo is a placeholder — client asked to swap the CCRG-only group shot.
- Logo is a placeholder cross — awaiting the board's preferred mark.
- Surgeon names, photos, bios are filler — drop real content into the
  `.team` section in `index.html`.

## Next step
Once the design is signed off, this folds into the WordPress theme
scaffold (ccg-theme) so it's editable in wp-admin.
