# fixmembershipfileids

Fixes a "feature" in CiviCRM related to Memberships with custom fields of type "File".

## Do you need this fix?

The fix is needed when:

* you have custom fields linked to memberships
* some of these custom fields are of type File
* your membership is linked to a relationship type

## Without this extension

Without this extension, the file you link to a membership is assigned to a membership of a related contact instead of the primary membership.

## With this extension

Everytime you edit a membership, a post-commit hook will correct wrong file links.



