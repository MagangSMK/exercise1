<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css"	>

</head>
<body>
<div class="bg-green-200 py-32 px-10 min-h-screen ">
  <!--   tip; mx-auto -- jagab ilusti keskele  -->
  <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">

    <form action="">

      <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="name" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="flex items-center mb-10">
        <label for="twitter" class="inline-block w-20 mr-6 text-right
                                    font-bold text-gray-600">Twitter</label>
        <input type="text" id="twitter" name="twitter" placeholder="twitter" 
               class="flex-1 py-2 border-b-2 border-gray-400  
                      text-gray-600
                      placeholder-gray-400">  <!-- check other class spec upper section -->
      </div>

      <div class="text-right">
        <button class="py-3 px-8 bg-green-400 text-white font-bold">Submit</button> 
      </div>

    </form>
  </div>
</div>
</body>
</html>