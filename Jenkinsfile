pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh "docker-compose build"
                echo "Step 1 Build complete"
            }
        }

        stage('Test') {
            steps {
                sh 'composer self-update --2'
                sh 'composer install'
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
