(() => {
  /**
   * @name fizzbuzziness
   * @description
   *   If num is a multiple of 3, 'Fizz'
   *   If num is a multiple of 5, 'Buzz'
   *   If num is a multiple of 3 and 5, 'FizzBuzz'
   *   If num is not a multiple of 3 or 5, outputs an empty string
   *
   * @param {Number} num: An integer number
   * @return {String} The 'FizzBuzziness' of num
  */
  'use strict'

  const fizzbuzziness = (num) => {
    return Object
      .keys(Object({ 'Fizz': num % 3 === 0, 'Buzz': num % 5 === 0 }))
      .filter(key => tbl[key])
      .reduce((acc, curr) => { return `${acc}${curr}` }, '')
  }
})()
