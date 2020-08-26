# 概要
古いバージョンのPHPを含むWebアプリコンテナのサンプルコードです。
Azure Web App for Containersで動作する前提で書かれています。

# データベース

MySQLのデータベースを使用します。
データベース名はphp、テーブル名はsampleとし、フォームに入力した数字でidキーに対してselectしたものを全件表示します。

Azure Database for MySQLで検証していますが、$dsnを適切に書き換えることで他のMySQL環境でも動作します。

# 注意

本サンプルの目的はリフト＆シフトの初期段階において、互換性を維持して古いPHPアプリをクラウドに移行するための方法を提示することであり、互換性維持のためにサポートが切れたバージョンのPHPを敢えて使用しています。

本サンプルを基に構築したWebアプリをパブリックネットワークに公開して本番運用することは大変危険ですので避けてください。

クローズド環境で使用する場合でも、最終的にはアプリのバージョンアップを行いサポートされたバージョンのPHPを利用することを強く推奨します。
