<?php include('./src/util/static-list.php'              ); ?>
<?php include('./src/controllers/category.php'    ); ?>

<div class="wrapper">
    <form>
            <?php 
            $categoryCollection = getApplicationCategoryCollection();
            foreach ($categoryCollection as $key => $value) { ?>
            <li>
                <?php echo $value['title']; ?> 
                <div>
                    <a class="btn" href="?action=edit&category_id=<?php echo $value['id']; ?>"> Промяна</a>
                    <a class="btn" href="?action=delete&category_id=<?php echo $value['id']; ?>">Изтриване</a>
                </div>
            </li>
            <?php } ?>
    </form>
    
    
</div>