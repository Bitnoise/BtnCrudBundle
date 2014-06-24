BtnCrudBundle
============

Crud bundle for symfony2

=============

### Step 1: Add BtnCrudBundle in your composer.json (private repo)

```js
{
    "require": {
        "bitnoise/crud-bundle": "dev-sf23-bs3 as dev-sf23",
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:Bitnoise/BtnCrudBundle.git"
        }
    ],
}
```

### Step 2: Enable the bundle

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Btn\CrudBundle\BtnCrudBundle(),
    );
}
```

### Step 3: Update your bower.json

``` js
    "dependencies": {
        ...
        "bootbox": "4.2.0"
    }
```
