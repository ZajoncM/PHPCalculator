<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="./style/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="w-50 mt-5 mx-auto">
            <div class="mb-3">
                <label for="first-number" class="form-label">Liczba 1</label>
                <input type="number" class="form-control" id="first-number" value="<?= $calculator->getFirstNumber() ?>" name="first" placeholder="Podaj liczbę">
              </div>
              <div class="mb-3">
                <label for="second-number" class="form-label">Liczba 2</label>
                <input type="number" class="form-control" id="second-number" value="<?= $calculator->getSecondNumber() ?>" name="second" placeholder="Podaj liczbę">
              </div>
              <div class="row d-flex justify-content-around mb-4">
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="operation" value="addition" id="flexRadioDefault1" <?php if ($calculator->getOperation() === 'addition') echo 'checked'  ?> > 
                    <label class="form-check-label" for="flexRadioDefault1">
                      Dodawanie
                    </label>
                  </div>
                  <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="operation" value="subtraction"  id="flexRadioDefault2" <?php if ($calculator->getOperation() === 'subtraction') echo 'checked'  ?>  >
                    <label class="form-check-label" for="flexRadioDefault2">
                      Odejmowanie
                    </label>
                  </div>
                  <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="operation" value="multiplication" id="flexRadioDefault3" <?php if ($calculator->getOperation() === 'multiplication') echo 'checked'  ?> >
                    <label class="form-check-label" for="flexRadioDefault3">
                      Mnożenie
                    </label>
                  </div>
                  <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="operation" value="division" id="flexRadioDefault4" <?php if ($calculator->getOperation() === 'division') echo 'checked'  ?> >
                    <label class="form-check-label" for="flexRadioDefault4">
                      Dzielenie
                    </label>
                  </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Wykonaj</button>
        </form>
        <div class="mt-5 w-50 mx-auto">
          <label for="result" class="form-label">Wynik</label>
          <input type="number" class="form-control" id="result" value="<?= $calculator->getResult() ?>" disabled>
        </div>

    </div>
       
</body>
</html>