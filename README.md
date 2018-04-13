# Elements Evaluation

Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos".

But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.

Requirements
- One `if` only.
- You can't use `else`, `else if` or ternary.
- Unit tests.
- Feel free to apply your SOLID knowledge.
- You can write the challenge in any language you want. Here at Linio we are big fans of PHP, Kotlin and TypeScript.


**Run Sample:**

Multiples Numbers between 1 at 100.

`> php GetMultiplesSample.php`

{
    "result": {
        "1": "",
        "2": "",
        "3": "Linio",
        "4": "",
        "5": "IT",
        "6": "Linio",
        "7": "",
        "8": "",
        "9": "Linio",
        "10": "IT",
        "11": "",
        "12": "Linio",
        "13": "",
        "14": "",
        "15": "Linianos",
        "16": "",
        "17": "",
        "18": "Linio",
        "19": "",
        "20": "IT",
        "21": "Linio",
        "22": "",
        "23": "",
        "24": "Linio",
        "25": "IT",
        "26": "",
        "27": "Linio",
        "28": "",
        "29": "",
        "30": "Linianos",
        "31": "",
        "32": "",
        "33": "Linio",
        "34": "",
        "35": "IT",
        "36": "Linio",
        "37": "",
        "38": "",
        "39": "Linio",
        "40": "IT",
        "41": "",
        "42": "Linio",
        "43": "",
        "44": "",
        "45": "Linianos",
        "46": "",
        "47": "",
        "48": "Linio",
        "49": "",
        "50": "IT",
        "51": "Linio",
        "52": "",
        "53": "",
        "54": "Linio",
        "55": "IT",
        "56": "",
        "57": "Linio",
        "58": "",
        "59": "",
        "60": "Linianos",
        "61": "",
        "62": "",
        "63": "Linio",
        "64": "",
        "65": "IT",
        "66": "Linio",
        "67": "",
        "68": "",
        "69": "Linio",
        "70": "IT",
        "71": "",
        "72": "Linio",
        "73": "",
        "74": "",
        "75": "Linianos",
        "76": "",
        "77": "",
        "78": "Linio",
        "79": "",
        "80": "IT",
        "81": "Linio",
        "82": "",
        "83": "",
        "84": "Linio",
        "85": "IT",
        "86": "",
        "87": "Linio",
        "88": "",
        "89": "",
        "90": "Linianos",
        "91": "",
        "92": "",
        "93": "Linio",
        "94": "",
        "95": "IT",
        "96": "Linio",
        "97": "",
        "98": "",
        "99": "Linio",
        "100": "IT"
    }
}

**Run Test:**

`> ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/ElementsEvaluationTest`

PHPUnit 7.1.3 by Sebastian Bergmann and contributors.

.......                                                             7 / 7 (100%)

Time: 1.32 seconds, Memory: 4.00MB

OK (7 tests, 7 assertions)