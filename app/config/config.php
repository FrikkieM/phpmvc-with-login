<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'phpframeworkdb');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/phpFramework');
  // Site Name
  define('SITENAME', 'PHP Framework');
  // App Version
  define('APPVERSION', '1.0.0');
  

/*
NOTES:
------
1. Remember: Update .htacess file under "public" to point to base: RewriteBase /phpframework/public

2. Typical workflow to add an ITEM, e.g. POSTS:
    - Create TABLE for ITEM
    - Create Controller for ITEM
    - Implement Access Control for ITEM
    - ITEM Model & Display
    - Add ITEM Form
    - Handle CRUD:
        - Inserting ITEM
        - Show Details for ITEM
        - Editing ITEM
        - Deleting ITEM

3. 

*/