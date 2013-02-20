Title:  Ash_NewProduct Extension  
Author: Peter McWilliams  
Email:  core@augustash.com  
Date:   September 14, 2010  

# Description

Simple extension that creates easy method for checking if a product is new.

Installation
------------

1. Clone module with [modman](https://github.com/colinmollenhour/modman)
2. Delete all contents of the Magento cache

Usage
-----

In your `list.phtml` or `view.phtml` template files, you can use the included 
helper to check whether the product is new:

    <?php if (Mage::helper('ash_newproduct')->isNew($_product)): ?>
    <h3>New!</h3>
    <?php endif; ?>

```
@copyright  Copyright (c) 2010 August Ash, Inc. (http://www.augustash.com)
```
