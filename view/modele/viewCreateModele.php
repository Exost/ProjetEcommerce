<form method="post" action="index.php?controller=modele&action=created">
    <fieldset>
        <legend>Nouveau modele :</legend>

        <label for="name" class="label">Name</label>
            <input type="text"  name="name"
                   id="name"  required/></Br>

        <label for="price" class="label">Price</label>
            <input type="number"  name="price"
                   id="name"  required/></Br>

        <label for="description" class="label">Description</label>
            <input type="text"  name="description"
                   id="description"  required/></Br>

        <label for="stock" class="label">Stock</label>
            <input type="number"  name="stock"
                   id="name"  required/></Br>

        <label for="category" class="label">Category</label>
             <select  name="category" id="category">
                 <?php
                 foreach($tab_Cat as $a)
                     echo "<option value='{$a->getNameCat()}'>{$a->getNameCat()}</option>";

                 ?>
             </select></Br>
            <label for="brand" class="label">Brand</label>
                <select  name="brand" id="brand">
                    <?php
                    foreach($tab_Brand as $a)
                        echo "<option value='{$a->getIdBrand()}'>{$a->getIdBrand()}</option>";

                    ?>
                </select></Br>
            <input type="submit" value="Creation" /> </p>
    </fieldset>
</form>