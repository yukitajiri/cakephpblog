<h1>記事一覧</h1>
<table>
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>投稿日</th>
    </tr>

    <?php foreach ($posts as $post) : ?>
    <tr>
        <td><?php echo $post['Post']['id'] ?></td>
        <td><?php echo $post['Post']['title'] ?></td>
        <td><?php echo $post['Post']['create_at'] ?></td>

    </tr>
    <?php endforeach; ?>
</table>