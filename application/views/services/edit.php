<!DOCTYPE html>
<html>
<head>
    <title>Edit Jasa</title>
</head>
<body>
    <h1>Edit Jasa</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('services/edit/'.$service['id']); ?>
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $service['title']; ?>"><br>

        <label for="description">Description</label>
        <textarea name="description"><?php echo $service['description']; ?></textarea><br>

        <label for="price">Price</label>
        <input type="text" name="price" value="<?php echo $service['price']; ?>"><br>

        <label for="rating">Rating</label>
        <input type="text" name="rating" value="<?php echo $service['rating']; ?>"><br>

        <label for="reviews">Reviews</label>
        <input type="text" name="reviews" value="<?php echo $service['reviews']; ?>"><br>

        <label for="category_id">Category</label>
        <select name="category_id">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $service['category_id']) ? 'selected' : ''; ?>><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" name="submit" value="Update Jasa">
    </form>
</body>
</html>