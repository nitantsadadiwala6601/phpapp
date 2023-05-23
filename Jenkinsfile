pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                bat 'docker-compose build'
            }
        }

        stage('Test') {
            steps {
                bat 'docker-compose run --rm app phpunit'
            }
        }

        stage('Deploy') {
            steps {
                bat 'docker-compose up -d'
            }
        }

        stage('Cleanup') {
            steps {
                bat 'docker-compose down'
            }
        }
    }
}