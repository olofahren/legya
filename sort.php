<div class="sorting">

       <!-- LIMIT -->
                <div class="select-display-amount" >
                    <form method="GET"> 
                        <input type="number" name="limit" min="0" value="<?php echo $_GET["limit"]?>">
                        <input type="hidden" id="keyHidden" name="key" value="<?php echo $_GET["key"]?>">
                        <input type="hidden" id="orderHidden" name="order" value="<?php echo $_GET["order"]?>">
                        <input type="hidden" id="sortByHidden" name="sort-by" value="<?php echo $_GET["sort-by"]?>">

                        <input type="submit" value="Limit results">
                    </form>
                </div>
        

        <!-- SORT BY -->
                <div class="sort">
                    <form method="GET">
                        <select name="sort">
                            <option value="score"<?php if($_GET["sort"]=="score"){echo "selected";} ?>>Relevance</option>
                            <option value="Setname" <?php if($_GET["sort"]=="Setname"){echo "selected";} ?>>Alpabetical</option>
                            <option value="Year" <?php if($_GET["sort"]=="Year"){echo "selected";} ?>>Release date</option>
                        </select>
                        <input type="hidden" id="keyHidden" name="key" value="<?php echo $_GET["key"]?>">
                        <input type="hidden" id="limitHidden" name="limit" value="<?php echo $_GET["limit"]?>">
                        <input type="hidden" id="orderHidden" name="order" value="<?php echo $_GET["order"]?>">

                        <input type="submit" value="Change sorting">
                    </form>
                </div>
        <!-- ASC/DESC -->
                <div class="order">
                    <form method="GET">
                        <select name="order">
                            <option value="desc" <?php if($_GET["order"]=="desc"){echo "selected";} ?> >Descending</option>
                            <option value="asc"<?php if($_GET["order"]=="asc"){echo "selected";} ?>>Ascending</option>
                        </select>
                        <input type="hidden" id="keyHidden" name="key" value="<?php echo $_GET["key"]?>">
                        <input type="hidden" id="limitHidden" name="limit" value="<?php echo $_GET["limit"]?>">
                        <input type="hidden" id="sortHidden" name="sort" value="<?php echo $_GET["sort"]?>">

                        <input type="submit" value="Change sorting">
                    </form>
                </div>

        </div>
