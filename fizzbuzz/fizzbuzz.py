from functools import reduce

def fizzbuzziness(num):
    """
    Return fizzbuzziness of a number

    Arguments:
    num -- an integer

    If num is a multiple of 3, 'Fizz'
    If num is a multiple of 5, 'Buzz'
    If num is a multiple of 3 and 5, 'FizzBuzz'
    If num is not a multiple of 3 or 5, outputs an empty string
    """

    tbl = { 'Fizz': num % 3 == 0, 'Buzz': num % 5 == 0 }
    trues = { k: v for k, v in tbl.items() if v }
    return reduce((lambda x, y: x + y), list(trues.keys()), '')

