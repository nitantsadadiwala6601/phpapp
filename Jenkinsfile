pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                bat "docker-compose build"
                echo "Step 1 Build complete"
            }
        }

        stage('Test') {
            steps {
                 bat "docker-compose run --rm php phpunit"
            }
        }

        stage('Deploy') {
            steps {
                bat "docker-compose up -d"
            }
        }

        stage('Cleanup') {
            steps {
                bat "docker-compose down"
            }
        }
    }
}