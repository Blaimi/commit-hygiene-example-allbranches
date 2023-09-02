1. repo has only `main`
2. push `all-together-no-review`
   * `git push github all-together-no-review:all-together`
   * `git push gitlab all-together-no-review:all-together`
3. create pull-/merge-requests and show it's uglyness
4. do the review
5. push `all-together`
    * `git push github all-together:all-together`
    * `git push gitlab all-together:all-together`
6. now commit was born
7. clone pull-/merge-requests
8. push `step-by-step-no-review`
    * `git push github step-by-step-no-review:step-by-step`
    * `git push gitlab step-by-step-no-review:step-by-step`
9. create pull-/merge-requests and show the much nicer review
10. do the review
11. push `step-by-step-fixed-up`
    * `git push github step-by-step-fixed-up:step-by-step`
    * `git push gitlab step-by-step-fixed-up:step-by-step`
