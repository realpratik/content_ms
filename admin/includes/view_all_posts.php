
           
           
           

<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Post id</th>
        <th>Post category id</th>
        <th>Post title</th>
        <th>Post author</th>
        <th>Post date</th>
        <th>Post image</th>
        <th>Post content</th>
        <th>Post tags</th>
        <th>post comment count</th>
        <th>Post status</th>                    
      </tr>
    </thead>
    <tbody>

      <?php
      global $connection;
      $query = mysqli_query($connection,"SELECT * FROM posts");
    
      while($row = mysqli_fetch_assoc($query)){
        $post_image= $row['post_image'];
        ?>

      <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_category_id']; ?></td>
        <td><?php echo $row['post_title']; ?></td>
        <td><?php echo $row['post_author']; ?></td>
        <td><?php echo $row['post_date']; ?></td>
        <!-- //FIX THE IMAGE LATER  -->
        <td><?php echo "<img src='../images/$post_image' alt='image' width='100' />"; ?> </td>
        <td><?php echo $row['post_content']; ?></td>
        <td><?php echo $row['post_tags']; ?></td>
      
        <td><?php echo $row['post_comment_count']; ?></td>
        <td><?php echo $row['post_status']; ?></td>
            
      </tr>

      <?php  }  ?>
    
    </tbody>
</table>