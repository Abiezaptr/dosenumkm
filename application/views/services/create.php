<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jasa</title>
</head>
<body>
    <h1>Tambah Jasa</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('services/create'); ?>
        <label for="title">Category</label>
        <input type="text" name="title"><br>

        <label for="description">Description</label>
        <textarea name="description"></textarea><br>

        <label for="price">Price</label>
        <input type="text" name="price"><br>

        <label for="rating">Rating</label>
        <input type="text" name="rating"><br>

        <label for="reviews">Reviews</label>
        <input type="text" name="reviews"><br>

        <label for="category_id">Category</label>
        <select name="category_id">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" name="submit" value="Tambah Jasa">
    </form>
</body>
</html>