<input 
    type="<?php echo esc_attr($type); ?>" 
    name="teecontrol_course_data_<?php echo esc_attr($setting); ?>" 
    value="<?php echo esc_attr($value); ?>"
    <?php if ($autocomplete) : ?>autocomplete="<?php echo esc_attr($autocomplete); ?>"<?php endif; ?>
    <?php if ($placeholder) : ?>placeholder="<?php echo esc_attr($placeholder); ?>"<?php endif; ?>
/>