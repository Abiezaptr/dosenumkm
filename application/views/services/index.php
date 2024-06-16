<!DOCTYPE html>
<html>
<head>
    <title>Jasa Pembuatan Website</title>
</head>
<body>
    <h1>Jasa Pembuatan Website Terbaik dan Profesional</h1>
    <a href="<?php echo site_url('web/services/create'); ?>">Tambah Jasa</a>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Rating</th>
            <th>Reviews</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($services as $service): ?>
        <tr>
            <td><?php echo $service['title']; ?></td>
            <td><?php echo $service['description']; ?></td>
            <td><?php echo $service['price']; ?></td>
            <td><?php echo $service['rating']; ?></td>
            <td><?php echo $service['reviews']; ?></td>
            <td>
                <a href="<?php echo site_url('web/services/edit/'.$service['id']); ?>">Edit</a>
                <a href="<?php echo site_url('web/services/delete/'.$service['id']); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>