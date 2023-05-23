pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh 'sudo docker-compose build'
            }
        }

        stage('Test') {
            steps {
                sh 'docker-compose run --rm app phpunit'
            }
        }

        stage('Deploy') {
            steps {
                sh 'docker-compose up -d'
            }
        }

        stage('Cleanup') {
            steps {
                sh 'docker-compose down'
            }
        }
    }
}
