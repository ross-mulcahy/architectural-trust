# Demo Import

This theme keeps demo-content import logic out of the runtime theme bootstrap.

Use the importer only when you want to seed a local/staging/demo site with:

- editable pages for `Home`, `Products`, `News & Intelligence`, `Login`, `Account Dashboard`, and `Transfers & Bill Pay`
- a `Blog` page assigned as the posts page
- sample editorial posts and categories for the query-driven homepage/news/article sections

## WP-CLI

For local/full WordPress environments where `wp eval-file` is acceptable:

```bash
wp eval-file wp-content/themes/architectural-trust/demo/import-demo-content.php
```

For WPVIP or other restricted environments, use the companion plugin command instead:

```bash
wp architectural-trust seed-demo
```

With VIP-CLI that becomes:

```bash
vip @your-app.develop -- wp architectural-trust seed-demo
```

Optional:

```bash
wp architectural-trust seed-demo --skip-images
```

## What It Does

- creates or updates the main demo pages
- assigns the correct custom page templates
- sets the homepage and posts page
- creates sample posts and categories
- sideloads featured images for those sample posts
- removes default sample content when present

## Notes

- This importer is intended for demo/staging use, not production content migration.
- Because it updates pages by slug, it is safe to rerun on the same demo site.
- The preferred approach on WPVIP is the companion plugin command rather than `wp eval-file`.
- After import, review navigation, footer/social links, and legal/disclosure copy in the Site Editor before showing the demo externally.
