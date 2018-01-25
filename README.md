# PNDA Website

This website is build with Automad, a flat-file content management framework. 

## Deployment

Tag the project like this:

```
git tag -a 'release/1.0.1' -m 'Added a tag'
git push origin master --tags
```

Then in Jenkins, deploy the website to staging/production using this tag.