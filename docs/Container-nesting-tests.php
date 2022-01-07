<?php $title = 'Container nesting tests'; ?>
<?php include 'includes/_header.php'; ?>

<div class="container bg-column h-40 my-40 copy">
  <p>container > container</p>
</div>

<hr>

<div class="container bg-column h-40 my-40">
  <div class="container bg-header h-40 my-40 copy">
    <p>container > container > container</p>
  </div>
</div>

<div class="breakout bg-header my-40">
  <div class="container bg-column py-40">
    <div class="container bg-primary py-40 copy">
      <p>breakout > container > container</p>
    </div>
  </div>
</div>

<hr>

<div class="breakout md:breakout-reset bg-header my-40">
  <div class="container bg-column py-40">
    <div class="container bg-primary py-40 copy">
      <p>breakout-reset > container > container</p>
    </div>
  </div>
</div>

<hr>

<div class="breakout md:breakout-reset bg-header my-40">
  <div class="container bg-column py-40">
    <div class="container bg-primary py-40">
      <div class="container bg-header py-40 copy">
        <p>breakout-reset > container > container > container</p>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="breakout bg-header my-40 py-20">
  <div class="container md:container-reset bg-column py-40">
    <div class="container bg-primary py-40 copy">
      <p>breakout > container-reset > container</p>
    </div>
  </div>
</div>

<hr>

<div class="breakout bg-header my-40 py-20">
  <div class="container md:container-reset bg-column py-40">
    <div class="container bg-primary py-40">
      <div class="container bg-header py-40 copy">
        <p>breakout > container-reset > container > container</p>
      </div>
    </div>
  </div>
</div>

<hr>

<!-- close the container opened in the header include -->
</div>

<div class="container lg:container-reset my-40 bg-header">
  <div class="container bg-column py-40 copy">
    <p>container-reset > container</p>
  </div>
</div>

<hr>

<div class="container lg:container-reset my-40 bg-header">
  <div class="container bg-column py-40">
    <div class="container bg-primary py-40 copy">
      <p>container-reset > container > container</p>
    </div>
  </div>
</div>

<!-- reopen container for rest of page content  -->
<div class="container">

<?php include 'includes/_footer.php'; ?>
