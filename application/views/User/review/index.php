<div class="container">
    <h2>Review List</h2>

    <?php if (!empty($message)) : ?>
        <div class="alert alert-success"><?php echo $message; ?></div>
    <?php endif; ?>

    <?php if (!empty($data_reviews)) : ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>News ID</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_reviews as $review) : ?>
                    <tr>
                        <td><?php echo $review->id; ?></td>
                        <td><?php echo $review->news_id; ?></td>
                        <td><?php echo $review->rating; ?></td>
                        <td><?php echo htmlspecialchars($review->comment); ?></td>
                        <td>
                            <a href="<?php echo site_url('review/action/' . $review->news_id . '/' . $review->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?php echo site_url('review/delete/' . $review->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No reviews found.</p>
    <?php endif; ?>
</div>