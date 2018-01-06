<?php

//Exemplos para outros tipos de registros:

echo $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}').'<br>'; // sm0@y8k96a.ej
echo $faker->randomElement($array = array ('a','b','c')).'<br>'; // 'b'
echo $faker->words($nb = 3, $asText = false).'<br>';
echo $faker->sentence($nbWords = 6, $variableNbWords = true).'<br>';
echo $faker->address.'<br>'; // rua, número e cep
echo $faker->text.'<br>'; // Para grandes quantidades de texto
echo $faker->sentence($nbWords = 6, $variableNbWords = true).'<br>';
echo $faker->text($maxNbChars = 200).'<br>';
echo $faker->title($gender = null|'male'|'female').'<br>';     // 'Ms.'
echo $faker->name($gender = null|'male'|'female').'<br>';      // 'Dr. Zane Stroman'
echo $faker->cityPrefix.'<br>';
echo $faker->state.'<br>';
echo $faker->stateAbbr.'<br>';
echo $faker->buildingNumber.'<br>';
echo $faker->city.'<br>';
echo $faker->streetName.'<br>';
echo $faker->streetAddress.'<br>';
echo $faker->postcode.'<br>';
echo $faker->country.'<br>';
echo $faker->PhoneNumber.'<br>';
echo $faker->company.'<br>';
echo $faker->date($format = 'Y-m-d', $max = 'now').'<br>';
echo $faker->time($format = 'H:i:s', $max = 'now').'<br>';
echo $faker->freeEmail.'<br>';
echo $faker->password.'<br>';
echo $faker->domainName.'<br>';
echo $faker->url.'<br>';
echo $faker->ipv4.'<br>';
echo $faker->macAddress.'<br>';
echo $faker->creditCardType.'<br>';
echo $faker->creditCardNumber.'<br>';
echo $faker->creditCardExpirationDateString.'<br>';
echo $faker->hexcolor.'<br>';
echo $faker->colorName.'<br>';
echo $faker->fileExtension.'<br>';
echo $faker->mimeType.'<br>';
echo $faker->locale.'<br>';
echo $faker->countryCode.'<br>';
echo $faker->randomHtml(2,3).'<br>';
