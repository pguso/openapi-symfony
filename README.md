This repository is part of the medium article https://pguso.medium.com/openapi-generator-use-symfony-bundle-in-your-project-28034505548d

## Setup Project

1. Clone the project via git or https.
2. install dependencies ``composer install``
3. Change DATABASE_URL in .env file to your connection config
4. Implement your Api Classes in the src/Api folder
5. Add your new Service to config/services.yaml and tag it

### Generate / Regenerate Symfony Bundle

``composer run generate-openapi-bundle``

### API implementation 

Check the docs here src/OpenApiBundle/Resources/docs
