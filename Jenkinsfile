pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh "export DOCKER_HOST=tcp://172.17.14.48:2375"
                sh "docker-compose build"
                echo "Step 1 Build complete"
            }
        }

        stage('Test') {
            steps {
                sh 'composer update'
                sh 'vendor/bin/phpunit'
                sh "docker-compose run --rm php-environment phpunit"
        }
        }
        stage('Deploy') {
            steps {
                sh "docker-compose up -d"
            }
        }

        stage('Cleanup') {
            steps {
                sh "docker-compose down"
            }
        }
    }
}
