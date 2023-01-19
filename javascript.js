$(function () {
  pretrazi();
  sortiraj();
  SubmitData();
});

function pretrazi() {
  $(document).on("click", "#pretraziBtn", function () {
    var pretrazi = $("#txtPretraga").val();

    $.ajax({
      url: "pretraziClanove.php",
      method: "post",
      data: { Pretrazi: pretrazi },

      success: function (result) {
        {
          $("#prikazBody").html(result);
        }
      },
    });
  });
}

function sortiraj() {
  $(document).on("click", "#sortBtn", function () {
    var kolonaSort = $("#selKolona").val();
    var sort = $("#selSort").val();

    $.ajax({
      url: "sortirajClanove.php",
      method: "post",
      data: { KolonaSort: kolonaSort, Sort: sort },

      success: function (result) {
        {
          $("#prikazBody").html(result);
        }
      },
    });
  });
}

function SubmitData() {
  $(document).ready(function () {
    var data = {
      name: $("#ime").val(),
      lastname: $("#prezime").val(),
      username: $("#username").val(),
      password: $("#password").val(),
      email: $("#email").val(),
      type: $("#tip").val(),
    };

    $.ajax({
      url: "dodajClana.php",
      method: "post",
      data: { ime: data.ime },

      success: function (result) {
        {
          $("#dodajClanaForma").html(result);
        }
      },
    });
  });
}
