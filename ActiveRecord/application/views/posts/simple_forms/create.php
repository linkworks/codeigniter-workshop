<h1> Create Post </h1>

<form action="<?= site_url('posts/create') ?>" method="post">
  <label for="title"> Title </label>
  <input type="text" id="title" name="title">
  
  <label for="body"> Body </label>
  <textarea name="body" id="body"></textarea>
  
  <input type="submit" value="Submit" name="submit">
  
  <!-- Created_at and Updated_at should be filled automatically :D -->
</form>