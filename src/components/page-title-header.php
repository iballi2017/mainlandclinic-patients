<section class="bg-title-1 | h-32">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 h-full flex flex-col items-start justify-center py-4 text-white">
        <ul class="breadcrumb | text-sm flex items-center">
            <?php
            $length = count($routes);
            $i = 0;
            while ($i < $length - 1) {
                echo "<li><a href=\"#\">" . $routes[$i] . "</a></li>";
                $i++;
            }
            ?>
            <li>
                <?php
                echo  $routes[$length - 1];
                ?>
            </li>
        </ul>
        <h1 class="text-3xl font-bold"><?php echo  $routes[$length - 1]; ?></h1>
    </div>
</section>