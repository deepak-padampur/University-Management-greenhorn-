

<ul class="collection">
                <li class="collection-item">
                    <h5>Search</h5>
                    <form action="search.php" method="GET">
                    
                    
                    <div class="input-field">
                        <input type="text" id="search" name="search" placeholder="search for...">
                        <div class="center">
                        <input type="submit" class="btn" value="Search" name="submit">
                        </div>
                    </form>
                    </div>
                </li>
            </ul>
            <div class="collection with-header">
               <h5 style="padding-left:20px">IMPORTANT UPDATES</h5>
                <a href="" class="collection-item grey lighten-3">
                  <?php
                  $res=mysqli_query($conn,"SELECT MSG FROM messages");
                  while($row=mysqli_fetch_array($res)){
                      echo $row['MSG'];
                  }
                  
                  ?>
                </a>
                <a href="" class="collection-item grey lighten-3">
                  
                </a>
                <a href="" class="collection-item grey lighten-3">
                  
                </a>
                <a href="" class="collection-item grey lighten-3">
                  
                </a>
                <a href="" class="collection-item grey lighten-3">
                  
                </a>
</div>

        </div>
     