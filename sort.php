<?php 

?>

<div class="sorting">

       <!-- LIMIT -->
                <div class="select-display-amount" >
                    <form method="GET"> 
                        <input type="number" name="limit">
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
                            <option value="Setname">Alpabetical</option>
                            <option value="Year">Release date</option>
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
                            <option value="desc">Descending</option>
                            <option value="asc">Ascending</option>
                        </select>
                        <input type="hidden" id="keyHidden" name="key" value="<?php echo $_GET["key"]?>">
                        <input type="hidden" id="limitHidden" name="limit" value="<?php echo $_GET["limit"]?>">
                        <input type="hidden" id="sortHidden" name="sort" value="<?php echo $_GET["sort"]?>">

                        <input type="submit" value="Change sorting">
                    </form>
                </div>

        </div>
