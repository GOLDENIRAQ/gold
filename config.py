import os


class Config(object):
    TG_BOT_TOKEN = os.environ.get("TG_BOT_TOKEN", "6817395973:AAH99oe-6V4YC3mo3fTamCjUibzshoqlAGw")

    APP_ID = int(os.environ.get("APP_ID", 26973196))

    API_HASH = os.environ.get("API_HASH", "fb9f1182117226f6698fb180defd2b6e")
