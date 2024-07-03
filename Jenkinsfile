pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Unit Tests') {
            steps {
                sh 'vendor/bin/phpunit'
                xunit([
                    thresholds: [
                        failed(failureThreshold: '0'),
                        skipped(unstableThreshold: '0')
                    ],
                    tools: [
                        PHPUnit(pattern: 'build/logs/junit.xml', stopProcessingIfError: true, failIfNotNew: true)
                    ]
                ])
                publishHTML([
                    allowMissing: false,
                    alwaysLinkToLastBuild: false,
                    keepAll: false,
                    reportDir: 'build/coverage',
                    reportFiles: 'index.html',
                    reportName: 'Coverage Report (HTML)',
                    reportTitles: ''
                ])
                discoverGitReferenceBuild()
                recordCoverage(tools: [[parser: 'COBERTURA', pattern: 'build/logs/cobertura.xml']])
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
