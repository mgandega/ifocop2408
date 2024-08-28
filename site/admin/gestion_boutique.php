<?php
include("../inc/init.inc.php");
include("../inc/haut.inc.php");

?>
<form>
    <input type="hidden" name="reference" /><br><br>

    <label for="categorie" >categorie</label>
    <input type="text" name="categorie" /><br><br>

    <label for="titre" >titre</label>
    <input type="text" name="titre" /><br><br>

    <label for="description" >description</label><br>
    <textarea name="description"  placeholder="description du produit"></textarea><br><br>

    <label for="couleur" >couleur</label>
    <input type="text" name="couleur" /><br><br>

    <label for="taille" >taille</label>
    <select name="taille">
        <option value="x">X</option>
        <option value="xl">XL</option>
        <option value="m">M</option>
        <option value="s">S</option>
    </select><br><br>

    <label for="public" >public</label>
    <select name="public">
        <option value="m">Masculin</option>
        <option value="f">Feminin</option>
        <option value="mixte">Mixte</option>
    </select><br><br>

    <label for="photo" >photo</label>
    <input type="text" name="photo" /><br><br>

    <label for="prix" >prix</label>
    <input type="number" name="prix" /><br><br>

    <label for="stock" >stock</label>
    <input type="number" name="stock" /><br><br>

    <input type="submit"  /><br><br>
</form>
<?php
include("../inc/bas.inc.php");
?>