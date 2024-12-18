# PHP Type Juggling Pitfall

This repository demonstrates a common, yet subtle, error in PHP related to type juggling during numeric operations.  Loose typing, while offering flexibility, can lead to unexpected behavior if not handled carefully.  The example showcases how attempting to add a string containing both numeric and non-numeric characters to an integer results in an unexpected outcome.

## The Problem

The `calculateSum` function intends to calculate the sum of an array of numbers.  However, the array contains a string ('4a') which causes PHP to implicitly convert the string to an integer, ignoring the non-numeric portion ('a').  This results in an incorrect sum.

## The Solution

The solution involves using strict type checking or explicit type conversion to prevent this unexpected type juggling.