<!-- user-order-history-app works! -->


<!-- user order details -->
<div>
    <?php include_once(__DIR__ . "./user-order-details.php"); ?>
</div>
<!-- user order listing -->
<div class="hidden p-2 sm:p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <?php include_once(__DIR__ . "./user-order-list.php"); ?>
</div>


<!-- 
    NOTE: Both appears on the same page, but not at once. "hidden" class is used to swap views
 -->