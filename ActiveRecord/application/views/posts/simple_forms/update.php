<h1> Update Post </h1>

<form action="<?= site_url('posts/update/' . $post->id) ?>" method="post">
  <label for="title"> Title </label>
  <input type="text" id="title" name="title" value="<?= $post->title ?>">
  
  <label for="body"> Body </label>
  <textarea name="body" id="body"><?= $post->body ?></textarea>
  
  <input type="submit" value="Submit" name="submit">
</form>