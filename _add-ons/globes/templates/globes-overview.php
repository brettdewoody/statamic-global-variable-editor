<div class="container">
    <form action="/admin.php/<?php print $route; ?>/update" method="post" class="primary-form">
    <div class="section content">
        
        
        <?php
        foreach ($globals as $key => $value):

          // The default fieldtype is Text.
          $fieldtype = array_get($value, 'type', 'text');

          // Value
          $val = "";
          if (isset($$key)) {
            $val = $$key;
          } elseif (isset($value['value'])) {
            $val = $value['value'];
          }

          // If no display label is set, we'll prettify the fieldname itself
          $value['display'] = array_get($value, 'display', Slug::prettify($key));

          // By default all fields are part of the 'yaml' key. They may need to be overridden
          // to set a meta/system field, like Content.
          $input_key = 'globals';
          $key = array_get($value, 'name');

          $wrapper_classes = array(
             'input-block',
             'input-' . $fieldtype
           );


        ?>

        <div class="<?php echo implode($wrapper_classes, ' ')?>" >
          <?php print Fieldtype::render_fieldtype($fieldtype, $key, $value, $val, tabindex(), $input_key);?>
        </div>

      <?php endforeach ?>


    </div>
    <div id="publish-action" class="footer-controls push-down">
      <input type="submit" class="btn" value="Save &amp; Publish" id="publish-submit">
    </div>
    </form>
</div>

<?php

function tabindex() {
  static $count = 1;

  return $count++;
}

?>