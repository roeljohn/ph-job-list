<?php if ( $args['city_data']['name'] ): ?>
    <li class="list-group-item d-flex justify-content-between align-items-start border-0">
    <div class="ms-2 me-auto">
        <div class="fw-bold">
            <a href="<?php echo $args['city_data']['city_link']; ?>"><?php echo $args['city_data']['name']; ?></a>
        </div> 
    </div>
    <span class="badge bg-primary rounded-pill">
        <?php echo $args['city_data']['job_count']; ?>
    </span>
</li>
<?php endif; ?>
