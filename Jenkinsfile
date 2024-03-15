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
                bat '"C:\\ProgramData\\Jenkins\\.jenkins\\workspace\\Hotel Booking\\vendor\\bin\\phpunit" tests'
            }
        }
        stage('Deployment') {
            steps {
                
            }
        }
        stage('Monitoring') {
            steps {
                bat 'curl -Ls https://download.newrelic.com/install/newrelic-cli/scripts/install.ps1 | Invoke-Expression'
                bat 'newrelic install --skip-proxy --quiet'
                bat 'newrelic alert-conditions list'
                bat 'newrelic alert-policies list'
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
