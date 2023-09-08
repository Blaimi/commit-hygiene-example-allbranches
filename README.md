1. repo has only `main`
2. push `all-together-no-review`
   * `git push github remotes/github-allbranches/all-together-no-review:refs/heads/deliveryAddress`
   * `git push gitlab remotes/github-allbranches/all-together-no-review:refs/heads/deliveryAddress`
3. create pull-/merge-requests and show it's uglyness
4. do the review
5. push `all-together`
    * `git push github remotes/github-allbranches/all-together:refs/heads/deliveryAddress`
    * `git push gitlab remotes/github-allbranches/all-together:refs/heads/deliveryAddress`
6. now commit was born
7. close pull-/merge-requests
8. push `step-by-step-no-review`
    * `git push github remotes/github-allbranches/step-by-step-no-review:refs/heads/deliveryAddress`
    * `git push gitlab remotes/github-allbranches/step-by-step-no-review:refs/heads/deliveryAddress`
9. create pull-/merge-requests and show the much nicer review
10. do the review
11. push `step-by-step-fixed-up`
    * `git push github remotes/github-allbranches/step-by-step-fixed-up:refs/heads/deliveryAddress --force`
    * `git push gitlab remotes/github-allbranches/step-by-step-fixed-up:refs/heads/deliveryAddress --force`
