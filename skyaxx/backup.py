import pickle as backup_storage


def backup(data):
    data_to_store = backup_storage.dumps(data)
    with open('./temp/backup.bcp', 'wb') as backup_file:
        try:
            backup_file.write(data_to_store)
        except OSError:
            pass


def restore():
    with open('./temp/backup.bcp', 'rb') as backup_file:
        backup_data = backup_file.read()
    return backup_storage.loads(backup_data)

