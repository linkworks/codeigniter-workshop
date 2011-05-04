<h1> Listing Posts </h1>

<?= anchor('posts/create', 'New Post') ?>

<table>
  <tr>
    <th> Id </th>
    <th> Title </th>
    <!--<th> Body </th>-->
    <th> Created </th>
    <th> Updated </th>
    <th> &nbsp; </th>
  </tr>
  
  <?php foreach ($posts as $post): ?>
  
  <tr>
    <td> <?= $post->id ?> </td>
    <td> <?= $post->title ?> </td>
    <!--<td> <?= $post->body ?> </td>-->
    <td> <?= $post->created_at ?> </td>
    <td> <?= $post->updated_at ?> </td>
    
    <td> 
      <?= anchor('posts/update/' . $post->id, 'Edit') ?>
      <?= anchor('posts/destroy/' . $post->id, 'Delete') ?>
    </td>
  </tr>
  
  <?php endforeach; ?>
</table>