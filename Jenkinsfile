pipeline {
    agent any
    
    stages {
        stage('Build') {
            steps {
                bat 'C:\\composer\\composer install'
            }
        }
        stage('Testing') {
            steps {
                
            }
        }
        stage('Deployment') {
            steps {
                
            }
        }
        stage('Monitoring') {
            steps {
               
            }
        }
    }

    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed!'
        }
    }
}
